<!DOCTYPE html>

<meta name="robots" content="noindex">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
<style id="jsbin-css">
body {
  background: #f5f5f5;

  h1 {
    text-align: center;
    font-family: arial;
    color: #5a5a5a;
  }

  ul {
    display: flex;
    list-style:none;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content:center;
    flex-basis: 80%;

    li {
      flex-basis: 20%;
      display:flex;
      flex-direction: column;
      margin-bottom: 20px;
      align-items:center;

      span {
        font-family: arial;
        font-size: 14px;
        color: #5a5a5a;
        text-align: center;
      }

      img {
        margin: 5px;
        border-radius: 3px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2); 
      }
    }
  }

}
</style>
</head>
<body>
  <h1>Authors</h1>
  <ul id="authors"></ul>
<script id="jsbin-javascript">
  function createNode(element) {
      return document.createElement(element);
  }

  function append(parent, el) {
    return parent.appendChild(el);
  }

  const ul = document.getElementById('authors');
  const url = 'https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-09&end_date=2015-09-09&api_key=t24wnzBt8LHLX3TYbJyHWsoyZ3qWVXlzyCwMLGDp';
  fetch(url)
  .then((resp) => resp.json())
  .then(function(data) {
    let authors = data.links;
    //ssslet authors1 = data.end_date;

    return authors.map(function(author) {
      let li = createNode('li'),
          img = createNode('img'),
          span = createNode('span');
      img.src = author.picture.medium;
      span.innerHTML = `${author.links.name} ${author.links.id}`;
      append(li, img);
      append(li, span);
      append(ul, li);
    })
  })
  .catch(function(error) {
    console.log(JSON.stringify(error));
  });   

</script>
</body>
</html>