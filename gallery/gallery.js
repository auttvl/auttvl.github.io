async function updateImages() {
    var urlParams = new URLSearchParams(window.location.search);
    var department = urlParams.get("department");

    fetch("./images_path.json")
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json();
      })
      .then((data) => {
        data = data[department];
        event_list = document.querySelector(".portfolio-menu ul");
        for (const item in data) {
          console.log(item);
          var li = document.createElement("li");
          li.classList.add("btn", "btn-outline-dark");
          li.setAttribute("data-filter", "." + item);
          li.innerHTML = item.toUpperCase();
          event_list.appendChild(li);
          var portfolio_item = document.querySelector(".portfolio-item");
          for (const image in data[item]) {
            var div = document.createElement("div");
            div.classList.add(
              "item",
              item,
              "col-lg-3",
              "col-md-4",
              "col-6",
              "col-sm"
            );
            var a = document.createElement("a");
            a.href = data[item][image];
            a.classList.add("fancylight", "popup-btn");
            a.setAttribute("data-fancybox-group", "light");
            var img = document.createElement("img");
            img.classList.add("img-fluid");
            img.src = data[item][image];
            a.appendChild(img);
            div.appendChild(a);
            portfolio_item.appendChild(div);
            console.log(image);
          }
        }
        /*var popup_btn = $(".popup-btn");
        console.log(popup_btn);
        popup_btn.magnificPopup({
          type: "image",
          gallery: {
            enabled: true,
          },
        });
        $(".portfolio-menu ul li").click(function () {
          $(".portfolio-menu ul li").removeClass("active");
          $(this).addClass("active");

          var selector = $(this).attr("data-filter");
          $(".portfolio-item").isotope({
            filter: selector,
          });
          return false;
        });*/
      })
      .catch((error) => {
        console.error("Fetch error:", error);
      });
  }
async function test() {
    $(".portfolio-menu ul li").click(function () {
      $(".portfolio-menu ul li").removeClass("active");
      $(this).addClass("active");

      var selector = $(this).attr("data-filter");
      $(".portfolio-item").isotope({
        filter: selector,
      });
      return false;
    });
    $(document).ready(function () {
      var popup_btn = $(".popup-btn");
      popup_btn.magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    });
  }

  await updateImages()
  await test()