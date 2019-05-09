<?php 

return function($site, $pages, $page) {
    $form = uniform(
        'contact-form',
        array(
            'required' => array(
                'name'  => '',
                '_from' => 'email'
            ),
            'actions' => array(
                array(
                    '_action' => 'email',
                    'to'      => 'jan.hula21@gmail.com',
                    'sender'  => 'info@my-domain.tld'
                )
            )
        )
    );
  return array(
    'form' => $form
  );
};

?>