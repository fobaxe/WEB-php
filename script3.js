function check_form(){
    let nb_errors = 0;
    const Client = document.querySelector('#client');
    const client_error = document.querySelector('#client-error');
    if (Client.value == ""){
        client_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        client_error.classList.add('titanic');
    }
    const estimate = document.querySelector('#estimate');
    const estimate_error = document.querySelector('#estimate-error');
    if (estimate.value == ""){
        estimate_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        estimate_error.classList.add('titanic');
    }
     const subject = document.querySelector('#subject');
    const subject_error = document.querySelector('#subject-error');
    if (subject.value == ""){
        subject_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        subject_error.classList.add('titanic');
    }
    const descr = document.querySelector('#description');
    const descr_error = document.querySelector('#description-error');
    if (descr.value == ""){
        descr_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        descr_error.classList.add('titanic');
    }
    const assigned = document.querySelector('#responsable');

    const assigned_error = document.querySelector('#responsable-error');
    if (assigned.value == ""){
        assigned_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        assigned_error.classList.add('titanic');
    }
    const due = document.querySelector('#due');
    const due_error = document.querySelector('#due-error');
    if (due.value == ""){
        due_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        due_error.classList.add('titanic');
    }
    return nb_errors;
}



const form1= document.querySelector('#create-project-form');
form1.addEventListener("submit", function(event){
    event.preventDefault();
    console.log("submit form");
    let errors = check_form();
    console.log("nb_errors : ", errors);
    if (errors == 0){
        const subject = document.querySelector('#subject');
        const description = document.querySelector('#description');
        const estimate = document.querySelector('#estimate');
        const responsable = document.querySelector('#responsable');
        const client = document.querySelector('#client');
        const due = document.querySelector('#due');
        console.log(subject.value, description.value, estimate.value, responsable.value, client.value, due.value);
        subject.value = "";
        description.value = "";
        estimate.value = "";
        client.value = "";
        due.value = "";
        responsable.value = "";
        const toast = document.querySelector("#success");
        console.log(toast);
        toast.classList.remove('titanic'); 
        setTimeout(() => {
            toast.classList.add('titanic');
        }, 1000);
      
    }
   
})
