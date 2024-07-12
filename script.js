function getQuote(service) {
    alert(`Veuillez nous contacter à contact.lycloud@gmail.com pour obtenir votre devis gratuit ou sur notre discord.`);
}

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Merci de nous avoir contactés. Nous reviendrons vers vous sous peu.');
});