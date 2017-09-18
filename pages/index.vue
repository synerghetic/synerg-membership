<template>
  <div id="app">
    <header>
      <h1>Synerg'hetic</h1>
      <h2>Formulaire d'adhésion en ligne</h2>
    </header>

    <div class="view view--welcome">
      <p>Pour adhérer, rien de plus simple : un mail <strong>@hetic.net</strong>, quelques informations basiques, une cotisation de 16,00€, et tu pourras faire partie de Synerg'hetic !</p>

      <form  method="post">
        <label for="heticmail--text">Entre ton mail @hetic.net</label>
        <input type="email" name="heticmail--text" value="" placeholder="denys.chomel@hetic.net" autocomplete="email">
        <input type="submit" name="heticmail--submit" value="Vérifier mon mail">
        <input type="text" name="heticmail-imothep" value="" style='display:none;'>
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
          <div class="form__group form-group--localization">
            <div>
              <label for="zipcode">Code postal</label>
              <input type="zipcode" name="zipcode" value="" placeholder="93100">
            </div>
            <div>
              <label for="city">Ville</label>
              <input type="city" name="city" value="" placeholder="Montreuil">
            </div>
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
            <input type="date" name="birthday">
          </div>
          <div class="form__group">
            <label for="socialsecurity">Numéro de Sécurité sociale</label>
            <input type="number" name="socialsecurity" value="" placeholder="94 1 08 75 123 45">
          </div>
          <div class="form__group form-group--identity">
            <label for="identityfile">Fournir une pièce d'identité (recto/verso)</label>
            <div>
              <input type="file" name="identityfile">
            </div>
            <div>
              <input type="file" name="identityfile">
            </div>
          </div>
        </section>

        <input type="text" name="adhesion-imothep" value="" style='display:none;'>
        <input type="submit" name="adhesion--submit" value="Adhérer à Synerg'hetic">
      </form>
    </div>

    <div class="view view--confirmation">
      <span>Bienvenue parmi nous !</span>
      <p>Tu fais maintenant partie de la grande famille Synerg'hetic.</p>
      <p>Un mail te sera envoyé dès que ton adhésion aura été validée. notre Secrétaire Générale Aude reviendra vers toi pour compléter ton adhésion.</p>
      <a href="http://synerghetic.net">Revenir au site de Synerg'hetic</a>
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
    font-size: 16px;
    line-height: 26px;
    color: #3E3E3E;
    background: #FFFFFF;
    width: 100%;
    height: 100%;
    min-width: 100vw;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .3s ease-out;
    & , * {box-sizing: border-box;}
    strong {font-weight: 500;}
    @media screen and (min-width: 454px) {
      background: rgba(73,12,102,1);
      max-width: 100%;
      padding: 40px 0;
      #app {border-radius: 8px;}
    }
  }

  #app {
    position: relative;
    max-width: 414px;
    height: 100%;
    padding: 0 15px;
    margin: auto;
    display: flex;
    flex-flow: column nowrap;
    background: #FFFFFF;
  }

  header {
    width: 100%;
    height: 140px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    h1 {
      font-weight: bold;
      color: #490C66;
      margin: 0 0 12px 0;
    }
    h2 {
      font-size: 16px;
      font-weight: normal;
      color: #490C66;
      margin: 0;
    }
  }

  footer {
    width: 100%;
    height: 100%;
    padding-bottom: 52px;
    p {
      font-size: 14px;
      line-height: 24px;
      margin: 0;
    }
  }

  .view {
    p {margin: 0 0 20px;}
    form {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      margin: 20px 0 14px 0;
      label {
        width: 100%;
        font-weight: 500;
        font-size: 14px;
        line-height: 14px;
        margin-bottom: 8px;
      }
      input, select {
        width: 100%;
        height: 50px;
        background: #F6F6F6;
        border-radius: 4px;
        outline: 0;
        -webkit-appearance: none;
        border:none;
        padding: 2px 14px 0;
        font-family: 'Fedra', sans-serif;
        color: #3E3E3E;
        margin-bottom: 20px;
        transition: .2s ease-out;
        &::placeholder {color: #929292;}
        &[type='submit'] {
          background: #490C66;
          color: #FFFFFF;
          text-transform: uppercase;
          margin-bottom: 0;
          cursor: pointer;
          transition: .2s ease-out;
          &:hover {background: rgba(73,12,102,.7);}
        }
      }
      select {
        -webkit-appearance: menulist;
      }
    }
  }

  .view--form {
    form {
      margin: 0 0 15px;
      .form-group--localization {
        display: flex;
        justify-content: space-between;
        > div:first-of-type {flex: 0 0 109px;}
        > div:last-of-type {flex: 0 0 calc(100% - 118px);}
      }
      .form-group--identity {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        label {
          flex: 1 0 100%;
          width: 100%;
        }
        > div {flex: 0 0 calc(50% - 5px);}
        input[type='file'] {
          background: transparent;
          color: transparent;
          padding: 0;
          &::-webkit-file-upload-button {
            visibility: hidden;
          }
          &::before {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            padding-top: 2px;
            background: #A5A5A5;
            color: #FFFFFF;
            text-transform: uppercase;
            border-radius: 4px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            transition: .2s ease-out;
            box-sizing: border-box;
          }
          &:hover::before,
          &:active::before {
            background: rgba(165,165,165,.7);
          }
        }
        div:first-of-type input::before {content: 'recto';}
        div:last-of-type input::before {content: 'verso';}
      }
    }
  }

  .view--confirmation {
    a {
      display: block;
      font-size: 14px;
      color: #490C66;
      line-height: 24px;
      text-align: center;
      margin: 18px auto;
    }
  }
</style>
