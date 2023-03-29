import os
import json
import datetime

# Function to scan a directory and its subdirectories
def scan_directory(directory):
    data = []
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith('.html'):
                file_path = os.path.join(root, file)
                rel_path = os.path.relpath(file_path, directory)
                # Create dictionary for each file
                file_dict = {
                    'name': file,
                    'path': rel_path,
                    'date': datetime.datetime.fromtimestamp(os.path.getmtime(file_path)).strftime('%Y-%m-%d')
                }
                data.append(file_dict)
    return data

# Save the data as JSON file
data = scan_directory('./')
with open('index.json', 'w') as f:
    json.dump(data, f)
    
    
# Change the directory path to the directory containing images you want to index
dir_path = "./"

images = []
for root, dirs, files in os.walk(dir_path):
    for file in files:
        if file.endswith(".jpg") or file.endswith(".jpeg") or file.endswith(".png"):
            file_path = os.path.join(root, file)
            # Get the image name and creation date
            image_name = os.path.splitext(file)[0]
            creation_time = os.path.getctime(file_path)
            # Add the image data to the list
            images.append({
                "name": image_name,
                "path": file_path,
                "date": creation_time
            })

# Sort the images based on creation date
images.sort(key=lambda x: x['date'])

# Write the image data to a JSON file
with open("image_data.json", "w") as outfile:
    json.dump(images, outfile)
