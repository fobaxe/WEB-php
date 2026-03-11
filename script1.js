<<<<<<< HEAD
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
    const subject = document.querySelector('#subject');
    const subject_error = document.querySelector('#subject-error');
    if (subject.value == ""){
        subject_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        subject_error.classList.add('titanic');
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

const form= document.querySelector('#create-ticket-form');
form.addEventListener("submit", function(event){
    event.preventDefault();
    console.log("submit form");
    let errors = check_form();
    console.log("nb_errors : ", errors);
    if (errors == 0){
        const subject = document.querySelector('#subject');
        const client = document.querySelector('#client');
        const due = document.querySelector('#due');
        console.log(subject.value, client.value, due.value);
        form.submit();
        subject.value = "";
        client.value = "";
        due.value = ""; 
        const toast = document.querySelector("#success");
        console.log(toast);
        toast.classList.remove('titanic'); 
        setTimeout(() => {
            toast.classList.add('titanic');
        }, 1000);
      
    }
})

=======
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
    const subject = document.querySelector('#subject');
    const subject_error = document.querySelector('#subject-error');
    if (subject.value == ""){
        subject_error.classList.remove('titanic');
        nb_errors++;
    }
    else{
        subject_error.classList.add('titanic');
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

const form= document.querySelector('#create-ticket-form');
form.addEventListener("submit", function(event){
    event.preventDefault();
    console.log("submit form");
    let errors = check_form();
    console.log("nb_errors : ", errors);
    if (errors == 0){
        const subject = document.querySelector('#subject');
        const client = document.querySelector('#client');
        const due = document.querySelector('#due');
        console.log(subject.value, client.value, due.value);
        form.submit();
        subject.value = "";
        client.value = "";
        due.value = ""; 
        const toast = document.querySelector("#success");
        console.log(toast);
        toast.classList.remove('titanic'); 
        setTimeout(() => {
            toast.classList.add('titanic');
        }, 1000);
      
    }
})

>>>>>>> d71a0ab5ba2a82b324c81ebd20d6a93b09d554ce
