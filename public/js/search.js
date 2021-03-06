const search = document.querySelector('input[placeholder="search hobby..."]');
const projectContainer = document.querySelector(".hobbies");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/searchHobbies", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (hobbies) {
            projectContainer.innerHTML = "";
            loadHobbies(hobbies);
        });
    }
});

function loadHobbies(hobbies) {
    hobbies.forEach(hobby => {
        console.log(hobbies);
        createProject(hobby);
    });
}

function createProject(hobby) {
    const template = document.querySelector("#hobby-template");

    const clone = template.content.cloneNode(true);
    const image = clone.querySelector("img");
    image.src = `/public/upload/${hobby.image}`;
    const title = clone.querySelector("#name");
    title.innerHTML = hobby.title;
    const description = clone.querySelector("#hobby-description");
    description.innerHTML = hobby.description;
    projectContainer.appendChild(clone);
    console.log("dziala");
}
