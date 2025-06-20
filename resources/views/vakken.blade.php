<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Vakken Overzicht</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Gegeven Vakken bij Software Development</h1>

    <table id="vakken-tabel">
        <thead>
            <tr>
                <th>Vaknaam</th>
                <th>Beschrijving</th>
                <th>Docent</th>
            </tr>
        </thead>
        <tbody>
            <!-- Wordt gevuld met JavaScript -->
        </tbody>
    </table>

    <script>
        fetch('/api/vakken')
            .then(response => response.json())
            .then(data => {
                const tbody = document.querySelector('#vakken-tabel tbody');
                data.forEach(vak => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${vak.naam}</td>
                        <td>${vak.beschrijving}</td>
                        <td>${vak.docent ? vak.docent.naam : 'Onbekend'}</td>
                    `;
                    tbody.appendChild(row);
                });
            })
            .catch(error => {
                console.error('Fout bij ophalen data:', error);
            });
    </script>
</body>
</html>
