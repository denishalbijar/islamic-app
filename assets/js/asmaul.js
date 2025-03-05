
let allHusnaData = [];
        
async function fetchRandomHusna() {
    const response = await fetch("https://api.myquran.com/v2/husna/acak");
    const data = await response.json();
    document.getElementById("husna").innerHTML = `
        <h2 class="arabic">${data.data.arab}</h2>
        <p class="latin">${data.data.latin}</p>
        <p class="indo">${data.data.indo}</p>
    `;
}

async function fetchAllHusna() {
    const response = await fetch("https://api.myquran.com/v2/husna/semua");
    const data = await response.json();
    allHusnaData = data.data;
    displayHusna(allHusnaData);
}

function displayHusna(list) {
    let html = "";
    list.forEach(item => {
        html += `
            <div class="husna-card">
                <h3 class="arabic">${item.arab}</h3>
                <p class="latin">${item.latin}</p>
                <p class="indo">${item.indo}</p>
            </div>
        `;
    });
    document.getElementById("all-husna").innerHTML = html;
}

function searchHusna() {
    let query = document.getElementById("search").value.toLowerCase();
    let filtered = allHusnaData.filter(item => 
        item.latin.toLowerCase().includes(query) || 
        item.indo.toLowerCase().includes(query)
    );
    displayHusna(filtered);
}

window.onload = fetchAllHusna;