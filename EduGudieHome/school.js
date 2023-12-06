document.addEventListener('DOMContentLoaded', function () {
     console.log(schools);
    const schoolInfoContainer = document.getElementById('schoolInfo');

    // Get school ID from the URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const schoolId = parseInt(urlParams.get('id'));

    // Access the 'schools' variable defined in the same HTML file
    const school = schools.find(s => s.Id === schoolId);

    // Check if the school ID is valid
    if (!school) {
        // Invalid school ID, redirect to the explore schools page
        window.location.href = 'indexSchools.php';
        return;
    }

            // Display school details on the page
            const nameElement = document.createElement('h2');
            nameElement.textContent = school.Name;
            schoolInfoContainer.appendChild(nameElement);

            // Display school photos (if available)
            if (school.Image) {
                const photoElement = document.createElement('img');
                photoElement.src = `img/${school.Image}`;
                photoElement.classList.add('school-photo');
                schoolInfoContainer.appendChild(photoElement);
            }

            const introductionElement = document.createElement('p');
            introductionElement.textContent = school.Details.Introduction;
            schoolInfoContainer.appendChild(introductionElement);

            const standsForElement = document.createElement('p');
            standsForElement.textContent = `Stands For: ${school.Details.StandsFor}`;
            schoolInfoContainer.appendChild(standsForElement);

            const historyElement = document.createElement('p');
            historyElement.textContent = `History: ${school.Details.History}`;
            schoolInfoContainer.appendChild(historyElement);

            const locationElement = document.createElement('p');
            locationElement.textContent = `Location: ${school.Location}`;
            schoolInfoContainer.appendChild(locationElement);

            const feesElement = document.createElement('p');
            feesElement.textContent = `Fees: ${school.Fees}`;
            schoolInfoContainer.appendChild(feesElement);

            const curriculumElement = document.createElement('p');
            curriculumElement.textContent = `Curriculum: ${school.Curriculum}`;
            schoolInfoContainer.appendChild(curriculumElement);

            // Add more details as needed

        })
        .catch(error => console.error('Error fetching school details:', error));





// document.addEventListener('DOMContentLoaded', function () {
//     const schoolInfoContainer = document.getElementById('schoolInfo');

//     // Get school ID from the URL parameter
//     const urlParams = new URLSearchParams(window.location.search);
//     const schoolId = parseInt(urlParams.get('id'));

//     // Fetch the specific school details using the school ID
//     fetch(`database.php?id=${schoolId}`)
//         .then(response => response.json())
//         .then(data => {
//             const school = data[0];

//             // Check if the school ID is valid
//             if (schoolId >= 0 && schoolId < schools.length) {
//                 const school = schools[schoolId];

//                 const nameElement = document.createElement('h2');
//                 nameElement.textContent = school.Name;
//                 schoolInfoContainer.appendChild(nameElement);

//                 // Display school photos (if available)
//                 if (school.Image) {
//                     const photoElement = document.createElement('img');
//                     photoElement.src = `img/${school.Image}`;
//                     photoElement.classList.add('school-photo');
//                     schoolInfoContainer.appendChild(photoElement);
//                 }

//                 const introductionElement = document.createElement('p');
//                 introductionElement.textContent = school.Details.Introduction;
//                 schoolInfoContainer.appendChild(introductionElement);

//                 const standsForElement = document.createElement('p');
//                 standsForElement.textContent = `Stands For: ${school.Details.StandsFor}`;
//                 schoolInfoContainer.appendChild(standsForElement);

//                 const historyElement = document.createElement('p');
//                 historyElement.textContent = `History: ${school.Details.History}`;
//                 schoolInfoContainer.appendChild(historyElement);

//                 const locationElement = document.createElement('p');
//                 locationElement.textContent = `Location: ${school.Location}`;
//                 schoolInfoContainer.appendChild(locationElement);

//                 const feesElement = document.createElement('p');
//                 feesElement.textContent = `Fees: ${school.Fees}`;
//                 schoolInfoContainer.appendChild(feesElement);

//                 const curriculumElement = document.createElement('p');
//                 curriculumElement.textContent = `Curriculum: ${school.Curriculum}`;
//                 schoolInfoContainer.appendChild(curriculumElement);

//                 // Add a form for submitting reviews
//                 const reviewForm = document.createElement('form');
//                 reviewForm.addEventListener('submit', function (event) {
//                     event.preventDefault();
//                     const reviewInput = document.getElementById('reviewInput');
//                     const newReview = reviewInput.value;
//                     if (newReview.trim() !== '') {
//                         school.Details.Reviews.push(newReview);
//                         // Save reviews to localStorage
//                         localStorage.setItem(`school_${schoolId}_reviews`, JSON.stringify(school.Details.Reviews));
//                         // Clear the input field
//                         reviewInput.value = '';
//                         // Update the displayed reviews
//                         updateReviewsList();
//                     }
//                 });

//                 const reviewInputLabel = document.createElement('label');
//                 reviewInputLabel.for = 'reviewInput';
//                 reviewInputLabel.textContent = 'Add a Review:';
//                 reviewForm.appendChild(reviewInputLabel);

//                 const reviewInput = document.createElement('textarea');
//                 reviewInput.id = 'reviewInput';
//                 reviewInput.placeholder = 'Write your review here...';
//                 reviewForm.appendChild(reviewInput);

//                 const submitButton = document.createElement('button');
//                 submitButton.type = 'submit';
//                 submitButton.textContent = 'Submit Review';
//                 reviewForm.appendChild(submitButton);

//                 schoolInfoContainer.appendChild(reviewForm);

//                 // Display reviews after the form
//                 const reviewsHeader = document.createElement('h3');
//                 reviewsHeader.textContent = 'Reviews';
//                 schoolInfoContainer.appendChild(reviewsHeader);

//                 const reviewsList = document.createElement('ul');
//                 schoolInfoContainer.appendChild(reviewsList);

//                 // Initialize reviews from localStorage
//                 let storedReviews = JSON.parse(localStorage.getItem(`school_${schoolId}_reviews`)) || [];
//                 school.Details.Reviews = storedReviews;

//                 if (school.Details.Reviews.length > 0) {
//                     school.Details.Reviews.forEach(review => {
//                         const reviewItem = document.createElement('li');
//                         reviewItem.textContent = review;
//                         reviewsList.appendChild(reviewItem);
//                     });
//                 } else {
//                     const noReviewsElement = document.createElement('p');
//                     noReviewsElement.textContent = 'No reviews yet.';
//                     reviewsList.appendChild(noReviewsElement);
//                 }

//                 // Function to update the displayed reviews
//                 function updateReviewsList() {
//                     reviewsList.innerHTML = '';
//                     if (school.Details.Reviews.length > 0) {
//                         school.Details.Reviews.forEach(review => {
//                             const reviewItem = document.createElement('li');
//                             reviewItem.textContent = review;
//                             reviewsList.appendChild(reviewItem);
//                         });
//                     } else {
//                         const noReviewsElement = document.createElement('p');
//                         noReviewsElement.textContent = 'No reviews yet.';
//                         reviewsList.appendChild(noReviewsElement);
//                     }
//                 }

//                 // Append more details here

//             } else {
//                 // Invalid school ID, redirect to the explore schools page
//                 window.location.href = 'index.html';
//             }

//             // My List Page
//             const mySchoolIds = JSON.parse(localStorage.getItem('mySchoolIds')) || [];

//             if (mySchoolIds.length > 0) {
//                 mySchoolIds.forEach(schoolId => {
//                     const school = schools[schoolId];
//                     createSchoolCard(school);
//                 });
//             } else {
//                 const noSchoolsElement = document.createElement('p');
//                 noSchoolsElement.textContent = 'Your list is empty.';
//                 myListContainer.appendChild(noSchoolsElement);
//             }

//             function createSchoolCard(school) {
//                 const schoolCard = document.createElement('div');
//                 schoolCard.classList.add('school-card');

//                 const nameElement = document.createElement('h2');
//                 nameElement.textContent = school.Name;
//                 schoolCard.appendChild(nameElement);

//                 // Display school photos (if available)
//                 if (school.Image) {
//                     const photoElement = document.createElement('img');
//                     photoElement.src = `img/${school.Image}`;
//                     photoElement.classList.add('school-photo');
//                     schoolCard.appendChild(photoElement);
//                 }

//                 const descriptionElement = document.createElement('p');
//                 descriptionElement.textContent = school.Description;
//                 schoolCard.appendChild(descriptionElement);

//                 myListContainer.appendChild(schoolCard);
//             }

//             function addToMyList(schoolId) {
//                 // Get existing school IDs from localStorage
//                 const mySchoolIds = JSON.parse(localStorage.getItem('mySchoolIds')) || [];

//                 // Check if the school ID is not already in the list
//                 if (!mySchoolIds.includes(schoolId)) {
//                     // Add the school ID to the list
//                     mySchoolIds.push(schoolId);

//                     // Save the updated list to localStorage
//                     localStorage.setItem('mySchoolIds', JSON.stringify(mySchoolIds));

//                     // Optionally, provide user feedback (e.g., show a message)
//                     alert('School added to My List!');
//                 } else {
//                     // Optionally, provide user feedback that the school is already in the list
//                     alert('School is already in My List.');
//                 }
//             }
//         });
//     })
//     .catch(error => console.error('Error fetching data:', error));
