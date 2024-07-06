<!DOCTYPE html>
<html>
<head>
    <title>Username Verification</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-box, .submit-btn {
            width: 100%;
            box-sizing: border-box;
            margin-top: 10px;
        }
        .submit-btn {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 0;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: darkgreen;
        }
        .message {
            margin-top: 10px;
            font-weight: bold;
        }
        .verified {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="verify_ajax.js"></script>
</head>
<body>
    <div class="container">
        <h2>User Name:</h2>
        <form id="usernameForm">
            <input type="text" id="username" name="username" class="input-box" placeholder="Username">
            <button type="button" class="submit-btn" id="submitBtn">Submit</button>
        </form>
        <div id="response" class="message"></div>
    </div>
</body>
</html>
