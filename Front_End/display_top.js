fetch('server_con.php').then((res) => res.json())
.then(response => {
	console.log(response);
	let output = '';
	for(let i in response){
            if(response[i].category === "top"){
                output += `<td>
                                  <img src="${response[i].img}" width="200px" height="300px" alt="movie" class="img-thumbnail"/>
                                  <p>${response[i].name}</p>
                                  <form action="../Back_End/movie_valid.php" method="POST">
                                      <input type="hidden" name="movieName" value="${response[i].name}">
                                      <button class="btn btn-info" type="submit">Click Me</button>
                                  </form>
                              </td>`;
            }
	}

	document.querySelector('.topbody').innerHTML = output;
}).catch(error => console.log(error));

$(document).ready(function(){
	$('.toptable').DataTable();
});