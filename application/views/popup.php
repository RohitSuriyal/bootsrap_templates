<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Example</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Overlay */
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            z-index: 10;
        }

        /* Close button on overlay */
        #overlay .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Popup */
        #popup {
            position: fixed;
            top: -100%;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 400px;
            background: white;
            padding: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 20;
            transition: top 0.5s ease;
            text-align: center;
        }

        /* Show Popup */
        #popup.show {
            top: 20%;
        }

        @media (max-width: 600px) {
            #popup {
                width: 90%;
            }
        }

        button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div id="overlay">
        <button id="closeOverlay" class="close-btn">&times;</button>
    </div>
    <div id="popup">

        <img width="100%" height="100%" src="https://img.freepik.com/free-vector/education-pattern-background-doodle-style_53876-115365.jpg?t=st=1716901216~exp=1716904816~hmac=0136c3e5c0dbb402a5b1eab173884972ee00edf8fab142febe73fb8749f6d0e0&w=740"></img>


        <!-- <button id="closePopup">Close</button> -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('popup');
            const overlay = document.getElementById('overlay');
            const closePopup = document.getElementById('closePopup');
            const closeOverlay = document.getElementById('closeOverlay');

            // Function to show the popup
            function showPopup() {
                overlay.style.display = 'block';
                popup.classList.add('show');
            }

            // Function to hide the popup
            function hidePopup() {
                overlay.style.display = 'none';
                popup.classList.remove('show');
            }

            // Show the popup after 5 seconds
            setTimeout(showPopup, 5000);

            // Add event listener to the close buttons

            closeOverlay.addEventListener('click', hidePopup);
        });
    </script>
</body>

</html>