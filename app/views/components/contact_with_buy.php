<section id="contact">
    <div class="contact-form">
        <form action="" method="post">
            <div class="form-group">
                <label for="lastname">Nom:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="firstname">Prénom:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label>Type de demande:</label>
                <div class="radio-group">
                    <input type="radio" id="info" name="request_type" value="information" checked required>
                    <label for="info">Information</label>
                    <input type="radio" id="purchase" name="request_type" value="achat">
                    <label for="purchase">Achat</label>
                </div>
            </div>
            
            <div class="form-group" id="message-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            
            <div class="form-group" id="kimono-group" style="display: none;">
                <label for="kimono">Sélectionnez un kimono:</label>
                <select id="kimono" name="kimono">
                    <option value="">-- Choisissez une option --</option>
                    <option value="basic">Kimono Basic - 39.99€</option>
                    <option value="intermediate">Kimono Intermédiaire - 59.99€</option>
                    <option value="premium">Kimono Premium - 89.99€</option>
                </select>
            </div>
            
            <button type="submit" class="btn-primary">Envoyer</button>
        </form>
    </div>

    <p>
        <h1>Hagakure Karate Club</h1>
    </p>
    <p>Hall omnisports - Stade Gaston Reiff</br>
    Rue Ernest Laurent 215</br>
    1420 Braine-l'Alleud</br>
    </p>

    <p>
        <h2>Contact :</h2>
    </p>
    <p>Joël Vandommele, président du club.</br>
    0496/77.98.74</p>

    <script>
        document.querySelectorAll('input[name="request_type"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const messageGroup = document.getElementById('message-group');
                const kimonoGroup = document.getElementById('kimono-group');
                
                if (this.value === 'information') {
                    messageGroup.style.display = 'block';
                    kimonoGroup.style.display = 'none';
                } else {
                    messageGroup.style.display = 'none';
                    kimonoGroup.style.display = 'block';
                }
            });
        });
    </script>
</section>