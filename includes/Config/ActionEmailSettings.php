<?php if ( ! defined( 'ABSPATH' ) ) exit;

return apply_filters( 'ninja_forms_action_email_settings', array(

    /**
    |--------------------------------------------------------------------------
    | Primary Settings
    |--------------------------------------------------------------------------
    */

    /**
     * To
     */

    'to'            => array(
        'name'           => 'to',
        'type'           => 'textbox',
        'group'          => 'primary',
        'label'          => __( 'To', 'ninja-forms' ),
        'placeholder'    => __( 'Email address or search for a field', 'ninja-forms' ),
        'value'          => '',
        'width'          => 'full',
        'use_merge_tags' => true,
    ),

    /**
     * Subject
     */

    'email_subject' => array(
        'name'           => 'email_subject',
        'type'           => 'textbox',
        'group'          => 'primary',
        'label'          => __( 'Subject', 'ninja-forms' ),
        'placeholder'    => __( 'Subject Text or seach for a field', 'ninja-forms' ),
        'value'          => '',
        'width'          => 'full',
        'use_merge_tags' => true,
    ),

    /**
     * Email Message
     */

    'email_message' => array(
        'name'           => 'email_message',
        'type'           => 'rte',
        'group'          => 'primary',
        'label'          => __( 'Email Message', 'ninja-forms' ),
        'placeholder'    => '',
        'value'          => '',
        'width'          => 'full',
        'use_merge_tags' => true,
    ),

    /**
    |--------------------------------------------------------------------------
    | Advanced Settings
    |--------------------------------------------------------------------------
    */

    /**
     * From Name
     */

    'from_name'     => array(
        'name'           => 'from_name',
        'type'           => 'textbox',
        'group'          => 'advanced',
        'label'          => __( 'From Name', 'ninja-forms' ),
        'placeholder'    => __( 'Name or fields', 'ninja-forms' ),
        'value'          => '',
        'width'          => 'one-half',
        'use_merge_tags' => true,
    ),

    /**
     * From Address
     */

    'from_address'  => array(
        'name'           => 'from_address',
        'type'           => 'textbox',
        'group'          => 'advanced',
        'label'          => __( 'From Address', 'ninja-forms' ),
        'placeholder'    => __( 'One email address or field', 'ninja-forms' ),
        'value'          => '',
        'use_merge_tags' => true,
    ),

    /**
     * Reply To
     */

    'reply_to'      => array(
        'name'           => 'reply_to',
        'type'           => 'textbox',
        'group'          => 'advanced',
        'label'          => __( 'Reply To', 'ninja-forms' ),
        'placeholder'    => '',
        'value'          => '',
        'use_merge_tags' => true,
    ),

    /**
     * Format
     */

    'email_format'  => array(
        'name'    => 'email_format',
        'type'    => 'select',
            'options' => array(
                array( 'label' => __( 'HTML', 'ninja-forms' ), 'value' => 'html' ),
                array( 'label' => __( 'Plain Text', 'ninja-forms' ), 'value' => 'plain' )
            ),
        'group'   => 'advanced',
        'label'   => __( 'Format', 'ninja-forms' ),
        'value'   => 'html',

    ),

    /**
     * Cc
     */

    'cc'            => array(
        'name'           => 'cc',
        'type'           => 'textbox',
        'group'          => 'advanced',
        'label'          => __( 'Cc', 'ninja-forms' ),
        'placeholder'    => '',
        'value'          => '',
        'use_merge_tags' => true,
    ),

    /**
     * Bcc
     */

    'bcc'           => array(
        'name'           => 'bcc',
        'type'           => 'textbox',
        'group'          => 'advanced',
        'label'          => __( 'Bcc', 'ninja-forms' ),
        'placeholder'    => '',
        'value'          => '',
        'use_merge_tags' => true,
    ),

    /**
     * Attach CSV
     */

    'attach_csv'    => array(
        'name'  => 'attach_csv',
        'type'  => 'toggle',
        'group' => 'advanced',
        'label' => __( 'Attach CSV', 'ninja-forms' ),
    ),

) );
