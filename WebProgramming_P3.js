function handleFormSubmit(event) {
	event.preventDefault(); //prevents form from going to php
  
    const data = new FormData(event.target); //compiles the form data in key/value pairs
  
	const formJSON = Object.fromEntries(data); //transforms list of key/value pairs into an object 

    /* for multi-selects, we need special handling
    formJSON.InputTagNameAttribute = data.getAll('InputTagNameAttribute');*/
  
	fetch('WebProgramming_P3.php', { // server-side checking if data has been submitted
            method: 'POST',
            body: data,
    })
    .then(response => {
		if (response.ok) {
			console.log(response.ok); // true will print in console logs if form has been submitted succesfully
		}
    });
	
    const results = document.querySelector('.results pre'); //puts the results in <pre> tag
    results.innerText = JSON.stringify(formJSON, null, 2); //turns JSON format into string 
}

const form = document.querySelector('.contact-form');
form.addEventListener('submit', handleFormSubmit);