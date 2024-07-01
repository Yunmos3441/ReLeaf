<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>pre home</title>

     <style>
          #change_text{
               color: #00AA9E;
               opacity: 1;
               transition: opacity 0.5s;
          }
          #changeText {
              opacity: 1;
              transition: opacity 0.5s;
          }
          .hide {
              opacity: 0 !important;
          }
     </style>
</head>
<body>
     <h1 id="change_text">
          Indigenous Healing: Ancient Wisdom for Modern Wellness
     </h1>

     <script>

          function change_text(){
               var slogan = ['Healing Minds through Indigenous Traditions',
               'Discover the Power of Indigenous Healing',
               'Revitalize Your Spirit with Indigenous Practices',
               'Reconnect with Nature, Heal Your Soul',
               'Indigenous Healing: Ancient Wisdom for Modern Wellness'];

               var words = document.getElementById("change_text");
               var count = 0;

               setInterval(change, 7000);

               function change(){
                    words.classList.add('hide');
                    setTimeout(function() {
                         words.innerHTML =slogan[count];
                         words.classList.remove('hide');
                         count++;
                         if(count == slogan.length) count = 0;
                    }, 1000);
               }
          }
          change_text();
     </script>
</body>
</html>
