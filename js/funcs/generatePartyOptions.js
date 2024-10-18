
const partyTypes = [
    'Birthday', 'Anniversary', 'Wedding', 'Graduation', 'Corporate Event',
    'Engagement', 'Baby Shower', 'Bridal Shower', 'Housewarming', 'Farewell',
    'Themed Party', 'Retirement', 'Holiday Party', 'Sporting Event', 'Concert',
    'Festival', 'Picnic', 'Reunion', 'Charity Event', 'Masquerade Ball'
];

const selectElement = document.getElementById('party_type');

partyTypes.forEach(type => {
    const option = document.createElement('option');
    option.value = type.toLowerCase().replace(/\s+/g, '_'); // Use a slug for the value
    option.textContent = type;
    selectElement.appendChild(option);
});

