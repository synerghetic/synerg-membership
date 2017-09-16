<template>
  <div id="app">
    <header>
      <h1>Synerg'hetic</h1>
      <h2>Formulaire d'adhésions en ligne</h2>
    </header>
    <div class="view view--welcome">
      <p>pour adhérer, rien de plus simple : un mail @hetic.net, quelques informations basiques, une cotisation de 16,00€, et tu pourras faire partie de Synerg'hetic !</p>

      <form  method="post">
        <label for="heticmail">Entre ton mail @hetic.net</label>
        <input type="email" name="heticmail--text" value="" placeholder="denys.chomel@hetic.net">
        <input type="submit" name="heticmail--submit" value="Vérifier mon mail">
      </form>
    </div>

    <div class="view view--form">
      <form method="post">
        <section class="basicInformation">
          <div class="form__group">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" value="" placeholder="Denys">
          </div>
          <div class="form__group">
            <label for="lastname">Nom de famille</label>
            <input type="text" name="lastname" value="" placeholder="Chomel">
          </div>
          <div class="form__group">
            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" value="" placeholder="+33601234578">
          </div>
        </section>

        <section class="schoolCursus">
          <div class="form__group">
            <label for="cursus">Cursus</label>
            <select name="cursus" placeholder="Grande École">
              <option value="">Grande école</option>
              <option value="">Bachelor</option>
              <option value="">MBA</option>
              <option value="">Mastère</option>
            </select>
          </div>
          <div class="form__group">
            <label for="promotion">Promotion</label>
            <select name="promotion" placeholder="P2019">
              <option value="">P2017</option>
              <option value="">P2018</option>
              <option value="">P2019</option>
              <option value="">P2020</option>
              <option value="">P2021</option>
              <option value="">P2022</option>
            </select>
          </div>
        </section>

        <section class="contextInformation">
          <div class="form__group">
            <label for="address">Adresse</label>
            <input type="address" name="address" value="" placeholder="27 bis, rue du Progrès">
          </div>
          <div class="form__group">
            <label for="zipcode">Code postal</label>
            <input type="zipcode" name="zipcode" value="" placeholder="93100">
            <label for="city">Ville</label>
            <input type="city" name="city" value="" placeholder="Montreuil">
          </div>
          <div class="form__group">
            <label for="nationality">Nationalité</label>
            <select name="nationality" placeholder="France">
              <option value="">France</option>
              <option value="">ah</option>
              <option value="">oh</option>
              <option value="">eh</option>
              <option value="">imothep</option>
              <option value="">le PE pour Synerg</option>
            </select>
          </div>
          <div class="form__group">
            <label for="birthday">Date de naissance</label>
            <input type="date" name="birthday" value="" placeholder="01/01/1996">
          </div>
          <div class="form__group">
            <label for="socialsecurity">Numéro de Sécurité sociale</label>
            <input type="number" name="socialsecurity" value="" placeholder="94 1 08 75 123 45">
          </div>
          <div class="form__group">
            <label for="identityfile">Fournir une pièce d'identité</label>
            <input type="file" name="identityfile">
          </div>
        </section>

        <input type="submit" name="adhesion--submit" value="Adhérer à Synerg'hetic">
      </form>
    </div>

    <div class="view view--confirmation">
      <span>Bienvenue parmi nous !</span>
      <p>Tu fais maintenant partie de la grande famille Synerg'hetic.</p>
      <p>Un mail te seras envoyé dès que ton adhésion aura été validée. notre Secrétaire Générale Aude reviendra vers toi pour compléter ton adhésion.</p>
    </div>

    <footer>
      <p>Si tu rencontres la moindre difficulté, notre génialissime Secrétaire Générale Aude est là pour t’aider : tu la retrouveras au bureau de Synerg’hetic ou sur les Internets.</p>
    </footer>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  body {
    font-family: 'Fedra', sans-serif;
  }
</style>
