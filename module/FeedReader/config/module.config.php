<?php
return array(    
    'router' => array(
        'routes' => array(
            'feed-home' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/feed',
                    'defaults' => array(
                        'controller' => 'FeedReader\Controller\FeedReader',
                        'action' => 'index' 
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' =>  array(
            'FeedReader\Controller\FeedReader' => 'FeedReader\Controller\FeedReaderController'  
        ),
    ), 
    'view_manager' => array(        
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'FR' => 'FeedReader\Service\FeedReaderService'
        ),
    ),
    
//    'service_manager' => array(
//        'invokables' => array(
//            'FeedReader\Service\FeedReaderService' => 'FeedReader\Service\FeedReaderService'
//        ),    
//    ),
);