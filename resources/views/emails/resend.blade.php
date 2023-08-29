<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

        body {
            background-image: url("https://github.com/bakaroti/resource/blob/main/liq3.png?raw=true");
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-image: url("https://github.com/bakaroti/resource/blob/main/liq2.jpg?raw=true");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added box shadow */
            text-align: center;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;

        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        p {
            color: #fff;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .frame {
            width: 90%;
            margin: 40px auto;
            text-align: center;
        }

        button {
            margin: 20px;
            outline: none;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            padding: 10px 25px;
            border: 2px solid #ffffff;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        /* 1 */
        .btn-1 {
            transition: all 0.3s ease;
        }

        .btn-1:hover {
            box-shadow:
                -7px -7px 20px 0px #fff9,
                -4px -4px 5px 0px #fff9,
                7px 7px 20px 0px #0002,
                4px 4px 5px 0px #0001;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img class="logo" src="https://github.com/bakaroti/resource/blob/main/logo_110.png?raw=true" alt="logo"
                width="100">
        </div>
        <h1>Thanks for registering!</h1>
        <p>Hello, {{ $get_user_name }}</p>
        <p>Your validation token is: {{ $token }}</p>
        <!-- 
        <button id="copyButton">Copy Token</button> -->

        <div class="frame">
            <button class="custom-btn btn-1" id="copyButton" style="color: white;">Copy Token</button>
        </div>


    </div>
</body>

<script>
    // Function to copy the token to clipboard
  function copyTokenToClipboard() {
    // Select the text field
    const tokenText = "{{ $token }}";
    const tempInput = document.createElement("input");
    tempInput.value = tokenText;
    document.body.appendChild(tempInput);

    // Copy the text inside the text field
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); /* For mobile devices */

    // Execute the copy command
    document.execCommand("copy");

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Alert or show a message indicating the successful copy (optional)
    alert("Token copied to clipboard: " + tokenText);
  }

  // Add click event listener to the "Copy" button
  const copyButton = document.getElementById("copyButton");
  copyButton.addEventListener("click", copyTokenToClipboard);
</script>



</html>