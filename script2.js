<<<<<<< HEAD
const filtres = document.querySelectorAll(".btn-filtre");

for (let i= 0; i < filtres.length; i++) {
    filtres[i].addEventListener("click", function(event) {
        event.preventDefault();
        console.log(filtres[i].innerText);
        const content = document.querySelectorAll('.card tbody tr');
        for (let j = 0; j < content.length; j++) {
            console.log(content[j]);    
            const status = content[j].querySelector(".status");
          
            console.log(status);
            if(filtres[i].innerText == "Tous"){
                content[j].classList.remove('titanic');
                continue;
            }
            if(filtres[i].innerText.toLowerCase() != status.innerText.toLowerCase()){
                content[j].classList.add('titanic');
            }
            else{
                content[j].classList.remove('titanic');
            }
        }
    });
}

const filtres1 = document.querySelectorAll(".btn-filtre1");
for (let i= 0; i < filtres1.length; i++) {
    filtres1[i].addEventListener("click", function(event) {
        event.preventDefault();
        console.log(filtres1[i].innerText);
        const content1 = document.querySelectorAll('.card tbody tr');
        for (let j = 0; j < content1.length; j++) {
            console.log(content1[j]);    
            const priority = content1[j].querySelector(".priority");
          
            console.log(priority);
            if(filtres1[i].innerText == "Toutes"){
                content1[j].classList.remove('titanic');
                continue;
            }
            if(filtres1[i].innerText.toLowerCase() != priority.innerText.toLowerCase()){
                content1[j].classList.add('titanic');
            }
            else{
                content1[j].classList.remove('titanic');
            }
        }
    });
}



=======
const filtres = document.querySelectorAll(".btn-filtre");

for (let i= 0; i < filtres.length; i++) {
    filtres[i].addEventListener("click", function(event) {
        event.preventDefault();
        console.log(filtres[i].innerText);
        const content = document.querySelectorAll('.card tbody tr');
        for (let j = 0; j < content.length; j++) {
            console.log(content[j]);    
            const status = content[j].querySelector(".status");
          
            console.log(status);
            if(filtres[i].innerText == "Tous"){
                content[j].classList.remove('titanic');
                continue;
            }
            if(filtres[i].innerText.toLowerCase() != status.innerText.toLowerCase()){
                content[j].classList.add('titanic');
            }
            else{
                content[j].classList.remove('titanic');
            }
        }
    });
}

const filtres1 = document.querySelectorAll(".btn-filtre1");
for (let i= 0; i < filtres1.length; i++) {
    filtres1[i].addEventListener("click", function(event) {
        event.preventDefault();
        console.log(filtres1[i].innerText);
        const content1 = document.querySelectorAll('.card tbody tr');
        for (let j = 0; j < content1.length; j++) {
            console.log(content1[j]);    
            const priority = content1[j].querySelector(".priority");
          
            console.log(priority);
            if(filtres1[i].innerText == "Toutes"){
                content1[j].classList.remove('titanic');
                continue;
            }
            if(filtres1[i].innerText.toLowerCase() != priority.innerText.toLowerCase()){
                content1[j].classList.add('titanic');
            }
            else{
                content1[j].classList.remove('titanic');
            }
        }
    });
}



>>>>>>> d71a0ab5ba2a82b324c81ebd20d6a93b09d554ce
