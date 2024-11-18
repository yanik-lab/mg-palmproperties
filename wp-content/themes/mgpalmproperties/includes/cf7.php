<?php
// ---------------------------- //
// SUIVI DES SOUMISSIONS DE FORMULAIRE PAR GOOGLE ANALYTICS
// ---------------------------- //
add_action('wp_footer', function () {
?>
<script>
document.addEventListener('wpcf7mailsent', function(event) {
    gtag('event', 'wpcf7_submission', {
        'event_category': event.detail.contactFormId,
        'event_label': event.detail.unitTag
    });
}, false);
</script>
<?php
}, 10, 0);

// ---------------------------- //
// POSTS META IN FORM
// ---------------------------- //
// wpcf7_add_shortcode('cf7_extra_fields', 'cf7_extra_fields_func', true);
// function cf7_extra_fields_func($atts)
// {
//     $html = '';
//     $html .= '<input type="hidden" name="page-title" value="' . get_the_title() . '" />';
//     $html .= '<input type="hidden" name="page-url" value="' . get_the_permalink() . '" />';
//     return $html;
// }

// REMOVE P TAG
// add_filter('wpcf7_autop_or_not', '__return_false');


// hook into wpcf7_before_send_mail
// Function for change mail recipient from ACF field Emil (activity)
// add_action('wpcf7_before_send_mail', "change_recipient");

// function change_recipient($contact_form)
// {

//     // var_dump('toto' . $contact_form->id);

//     $submission = WPCF7_Submission::get_instance();

//     if ($contact_form->id == 5493) {
//         // GET POST ID
//         $unit_tag = $submission->get_meta('unit_tag');
//         $explode_unit_tag = explode("-", $unit_tag);
//         $post_id = str_replace("p", "", $explode_unit_tag[2]);
//         // GET AGENT ID
//         $agent = get_field('contact', $post_id)['agent_associe'];
//         $agentID = $agent[0]->ID;
//         $recipient = get_field('mail', $agentID);
//         if ($recipient) {
//             $mail = $contact_form->prop('mail');
//             $mail['recipient'] = $recipient;
//             $contact_form->set_properties(array('mail' => $mail));
//         } else {
//             $recipient = get_field('email_principal', 'options');
//             $mail = $contact_form->prop('mail');
//             $mail['recipient'] = $recipient;
//             $contact_form->set_properties(array('mail' => $mail));
//         }
//     } else {
//         $recipient = get_field('email_principal', 'options');
//         if ($recipient) {
//             $mail = $contact_form->prop('mail');
//             $mail['recipient'] = $recipient;
//             $contact_form->set_properties(array('mail' => $mail));
//         }
//     }
// }