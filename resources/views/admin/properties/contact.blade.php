<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .contact-container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="contact-container">
    <h1>Contactez-nous</h1>
    <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email">

        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</div>

</body>
</html>
