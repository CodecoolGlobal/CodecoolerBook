console.log("!!!!!!!!")
async function postData(url) {
    fetch(url)
        .then(response => response.json())
        .then(data => displayResponse(data));
}

function displayResponse(response){
    console.log(response)
    let output = '';
    for(let post in response){

        output += `
        <h1 class="card"> ${response[post].message}  </h1>
        
        `
        // SELECT post.message, user_profile.last_name  FROM user_profile INNER JOIN post ON user_profile.id =post.creator_profile_id;
    }

    document.querySelector(".post").innerHTML = output;
}


function fetchData(){


  postData('models/getpostdata')

}

fetchData()