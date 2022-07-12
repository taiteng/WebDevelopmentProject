fetch('server_con.php').then((res) => res.json())
.then(response => {
	console.log(response);
	let output = '';
	for(let i in response){
		output += `<tr>
			<td>${response[i].name}</td>
			<td>${response[i].descc}</td>
			<td>${response[i].category}</td>
			<td>${response[i].datee}</td>
                        <td>${response[i].type}</td>
                        <td>${response[i].genre}</td>
                        <td>${response[i].timee}</td>
                        <td>${response[i].img}</td>
                        <td>
                                    <form action="edit_valid.php" method="POST">
                                        <input type="hidden" name="movieID" value="${response[i].movie_id}">
                                        <button class="btn btn-info" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="delete_movie.php" method="POST">
                                        <input type="hidden" name="movieID" value="${response[i].movie_id}">
                                        <button class="btn btn-info" type="submit">Delete</button>
                                    </form>
                                </td>
		</tr>`;
                
	}

	document.querySelector('.tbody').innerHTML = output;
}).catch(error => console.log(error));

// DATA TABLES
$(document).ready(function(){
	$('.table').DataTable();
});