document.addEventListener('DOMContentLoaded', function () {
    const myListContainer = document.getElementById('myList');

    // Get school IDs from localStorage
    const mySchoolIds = JSON.parse(localStorage.getItem('mySchoolIds')) || [];

    if (mySchoolIds.length > 0) {
        mySchoolIds.forEach(schoolId => {
            const school = schools[schoolId];
            createSchoolCard(school);
        });
    } else {
        const noSchoolsElement = document.createElement('p');
        noSchoolsElement.textContent = 'Your list is empty.';
        myListContainer.appendChild(noSchoolsElement);
    }

    function createSchoolCard(school) {
        const schoolCard = document.createElement('div');
        schoolCard.classList.add('school-card');

        const nameElement = document.createElement('h2');
        nameElement.textContent = school.name;
        schoolCard.appendChild(nameElement);

        // Display school photos (if available)
        if (school.image) {
            const photoElement = document.createElement('img');
            photoElement.src = school.image;
            photoElement.classList.add('school-photo');
            schoolCard.appendChild(photoElement);
        }

        const descriptionElement = document.createElement('p');
        descriptionElement.textContent = school.description;
        schoolCard.appendChild(descriptionElement);

        // Add more details as needed

        myListContainer.appendChild(schoolCard);
    }
});
