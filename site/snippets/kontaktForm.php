<section>
    <div class="row align-center">


      <div id="contactForm" class="small-12 medium-8 large-6 columns">
        <div class="kontaktniform">
          <h1>
            Kontaktujte nás
          </h1>
        </div>
        <form id="myForm" action="/#myForm" method="post" data-abide>
          <label>Jméno</label>
          <small class="error">Je potřeba vyplnit celé Vaše jméno.</small>
          <input  <?php e($form->hasError('_name'), ' class="erroneous"')?> type="text" name="name" placeholder="Jméno a Příjmení" required value="<?php $form->echoValue('name')?>">

          <label>Email</label>
          <small class="error">Je potřeba zadat celou Vaši emailovou adresu.</small>

          <input <?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" placeholder="jmeno@email.cz" required value="<?php $form->echoValue('_from') ?>">

          <label>Vaše zpráva</label>
          <small class="error">Zde napište </small>
          <textarea placeholder="Zde napište Vaši zprávu" required><?php $form->echoValue('message') ?></textarea>
          <a name="form"></a>
        <?php if ($form->hasMessage()): ?>
            <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                <?php $form->echoMessage() ?>
            </div>
        <?php endif; ?>
          <input type="submit" name="_submit" class="radius button submitBut" value="Odeslat"></button></a>
        </form>
      </div>
      <!--end 8 columns-->
  </section>