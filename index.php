<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
</head>
<body>
  <form action="thanks.php" method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">Numéro de télépphone :</label>
      <input type="tel"  id="phone"  name="phone"></input>
    </div>
    <div>
      <label  for="nom">Sujet du mail :</label>
      <select name="subject">
        <option value="subject1">Sujet n°1</option>
        <option value="subject2">Sujet n°2</option>
        <option value="subject3">Sujet n°3</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>