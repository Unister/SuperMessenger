<?php

return array(
    'super_messenger' => array(
        'message_open_format' => '<ul%s><li>',
        'message_separator_string' => '</li><li>',
        'message_close_string' => '</li></ul>',
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'supermessenger' => 'SuperMessenger\Controller\Plugin\SuperMessenger',
        ),
        'aliases' => array(
            'flashmessenger' => 'supermessenger',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'supermessenger' => 'SuperMessenger\View\Helper\SuperMessenger',
        ),
        'aliases' => array(
            'flashmessenger' => 'supermessenger',
        ),
    ),
);
