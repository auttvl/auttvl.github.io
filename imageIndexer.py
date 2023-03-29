import os
import json

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
