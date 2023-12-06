        let originalSchools;

        // Fetch data from the PHP script
        fetch('database.php')
            .then(response => response.json())
            .then(data => {
                // Store the original list
                originalSchools = data;

                // Other code...

                // Render the initial list of schools
                renderSchoolList(originalSchools);
            })
            .catch(error => console.error('Error fetching data:', error));

        // Function to render the school list
        function renderSchoolList(schools) {
            const schoolListContainer = document.getElementById('schoolList');
            schoolListContainer.innerHTML = '';

            schools.forEach((school, index) => {
                const schoolCard = document.createElement('div');
                schoolCard.classList.add('school-card');

// schoolCard.addEventListener('click', function () {
//     window.location.href = `school.php?id=${school.School_ID}`;
// });


                const imageElement = document.createElement('img');
                imageElement.src = `img/${school.Image}`;
                imageElement.style.width = '200px';
                imageElement.style.height = 'auto';

                const nameElement = document.createElement('h2');
                nameElement.textContent = school.Name;

                const locationElement = document.createElement('p');
                locationElement.textContent = `Location: ${school.Location}`;

                const descriptionElement = document.createElement('p');
                descriptionElement.textContent = school.Description;

                        const addButton = document.createElement('button');
        // addButton.className = 'btn btn-primary py-3 px-5';
        addButton.id = 'button';
        addButton.textContent = 'Add To My List';
        addButton.addEventListener('click', function () {
            const confirmAdd = confirm('Are you sure that you want to add this school to your list?');
            if (confirmAdd) {
                const schoolId = school.School_ID;
                window.location.href = `php/insertion.inc.php?action=addS&id=${schoolId}`;
            }
        });

                schoolCard.appendChild(imageElement);
                schoolCard.appendChild(nameElement);
                schoolCard.appendChild(locationElement);
                schoolCard.appendChild(descriptionElement);
                schoolCard.appendChild(addButton);

                schoolListContainer.appendChild(schoolCard);
            });
        }

        function searchSchools() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();

            // Check if originalSchools is defined and not null
            if (originalSchools) {
                // Filter schools based on the search term
                const filteredSchools = originalSchools.filter(school => school.Name.toLowerCase().includes(searchTerm));

                // Render the filtered list of schools
                renderSchoolList(filteredSchools);
            }
        }
