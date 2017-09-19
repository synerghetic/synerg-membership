<template>
  <div id="app">
    <header>
      <h1>Synerg'hetic</h1>
      <h2>Formulaire d'adhésion en ligne</h2>
    </header>

    <div class="view view--welcome" v-if="view == 1">
      <p>Participe à nos projets rémunérés et à nos évènements exclusifs en adhérant à Synerg’hetic.</p>

      <p style="font-size:14px;">Une cotisation de 16€ te sera demandée, l’adhésion est valable pour toute la durée de ta scolarité.</p>

      <form  method="post">
        <label for="heticmail--text">Entre ton mail @hetic.net</label>
        <input type="email" name="heticmail--text" value="" placeholder="denys.chomel@hetic.net" autocomplete="email">
        <input type="submit" name="heticmail--submit" value="Vérifier mon mail">
        <input type="text" name="heticmail-imothep" value="" style='display:none;'>
      </form>
    </div>

    <div class="view view--form" v-if="view == 2">
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
        <input type="submit" name="adhesion--submit" value="Payer ton adhésion">
      </form>
    </div>

    <div class="view view--confirmation" v-if="view == 3">
      <span>Nous avons bien reçu ta demande d’adhésion.</span>
      <p>Passe au bureau signer ton adhésion à la réception du SMS de Synerg’hetic.</p>
      <p>Tu peux d’ores et déjà nous suivre sur les réseaux sociaux :</p>
      Boutons j'aime / follow à ajouter
    </div>

    <footer>
      <p>Tu rencontres un problème ?<br><strong>Passe nous voir au bureau.</strong></p>
    </footer>
  </div>
</template>

<script>
export default {
  data () {
    return {
      view: 1
    }
  },
  methods: {
    toView2: function () {
      console.log('toView2')
    }
  }
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
    transition: .3s ease-out;
    & , * {box-sizing: border-box;}
    strong {font-weight: 500;}
    @media screen and (min-width: 494px) {
      background: rgba(73,12,102,1);
      align-items: center;
      max-width: 100%;
      padding: 40px 0;
      #app {border-radius: 8px;}
    }
  }

  #app {
    position: relative;
    min-width: 345px;
    max-width: 414px;
    height: 100%;
    padding: 0 15px;
    margin: auto;
    display: flex;
    flex-flow: column nowrap;
    background: #FFFFFF;
    @media screen and (min-width: 494px) {
      max-width: 444px;
      padding: 15px 30px;
    }
  }

  header {
    width: 100%;
    min-height: 140px;
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
      text-align: center;
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
          font-weight: 500;
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
