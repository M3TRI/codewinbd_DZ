document.getElementById('uploadButton').addEventListener('click', async function() {
    const form = document.getElementById('uploadForm');
    const formData = new FormData(form);

    try {
        const response = await fetch('/upload.php', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();
        document.getElementById('response').innerText = JSON.stringify(result, null, 2);
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('response').innerText =  JSON.stringify(error, null, 2);
    }
});
