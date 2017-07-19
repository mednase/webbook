<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // messaging_inbox
        if (preg_match('#^/(?P<role>[^/]++)/messages/inbox(?:/(?P<date>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_inbox')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::inboxAction',  'date' => NULL,));
        }

        // messaging_sent
        if (preg_match('#^/(?P<role>[^/]++)/messages/sent(?:/(?P<date>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_sent')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::sentAction',  'date' => NULL,));
        }

        // messaging_show_msg
        if (preg_match('#^/(?P<role>[^/]++)/messages/(?P<token>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_show_msg')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::showMessageAction',));
        }

        // messaging_show_my_msg
        if (preg_match('#^/(?P<role>[^/]++)/messages/sent_message/(?P<token>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_show_my_msg')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::showSentMessageAction',));
        }

        // messaging_delete_sent_messages
        if (preg_match('#^/(?P<role>[^/]++)/messages/sent_message/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_messaging_delete_sent_messages;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_delete_sent_messages')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::deleteSenTMessageAction',));
        }
        not_messaging_delete_sent_messages:

        // messaging_mark_as_read
        if (preg_match('#^/(?P<role>[^/]++)/messages/mark_as_read$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_messaging_mark_as_read;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_mark_as_read')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::markAsReadAction',));
        }
        not_messaging_mark_as_read:

        // messaging_delete_inbox_messages
        if (preg_match('#^/(?P<role>[^/]++)/messages/inbox_message/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_messaging_delete_inbox_messages;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_delete_inbox_messages')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::deleteInboxMessageAction',));
        }
        not_messaging_delete_inbox_messages:

        // messaging_important
        if (preg_match('#^/(?P<role>[^/]++)/messages/important$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_important')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::importantAction',));
        }

        // set_important_msg
        if (preg_match('#^/(?P<role>[^/]++)/messages/setImportant$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_important_msg')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::setMsgImportantAction',));
        }

        // messaging_compose
        if (preg_match('#^/(?P<role>[^/]++)/messages/compose$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_compose')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::composeAction',));
        }

        // messaging_search
        if (preg_match('#^/(?P<role>[^/]++)/messages/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messaging_search')), array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::searchAction',));
        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_categories
            if ($pathinfo === '/api/categories') {
                return array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::getCategoriesAction',  '_route' => 'api_categories',);
            }

            // register_page
            if (0 === strpos($pathinfo, '/api/register') && preg_match('#^/api/register/(?P<plan>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_page')), array (  '_controller' => 'Core\\UserBundle\\Controller\\DefaultController::registerAction',));
            }

            // api_home
            if ($pathinfo === '/api/home') {
                return array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::homeAction',  '_route' => 'api_home',);
            }

            // api_get_book
            if (0 === strpos($pathinfo, '/api/book') && preg_match('#^/api/book/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_book')), array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::getBookAction',));
            }

            // api_subscribe_newsletter
            if ($pathinfo === '/api/newsletter/subscribe') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_subscribe_newsletter;
                }

                return array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::newsletterSubscribeAction',  '_route' => 'api_subscribe_newsletter',);
            }
            not_api_subscribe_newsletter:

            // api_category_books
            if (0 === strpos($pathinfo, '/api/books') && preg_match('#^/api/books/(?P<id>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_books')), array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::getBookByCategoryAction',));
            }

            // api_shopping_cart_books
            if ($pathinfo === '/api/shopping_cart/books') {
                return array (  '_controller' => 'Webbook\\FrontOfficeBundle\\Controller\\DefaultController::getShoppingCartBooksAction',  '_route' => 'api_shopping_cart_books',);
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category_index');
                }

                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
            }
            not_category_index:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Core\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'Core\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

        }

        // api_fos_user_security_check
        if ($pathinfo === '/api/login_check') {
            return array (  '_controller' => 'Core\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'api_fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'Core\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        // get_user_messages
        if ($pathinfo === '/user/messages') {
            return array (  '_controller' => 'Webbook\\MessagingBundle\\Controller\\DefaultController::getUserMessagesAction',  '_route' => 'get_user_messages',);
        }

        // redirect_site
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'redirect_site');
            }

            return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'redirect_site',);
        }

        if (0 === strpos($pathinfo, '/administrator')) {
            // administrator_homepage
            if (rtrim($pathinfo, '/') === '/administrator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administrator_homepage');
                }

                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::indexAction',  '_route' => 'administrator_homepage',);
            }

            if (0 === strpos($pathinfo, '/administrator/users')) {
                // administrator_users
                if ($pathinfo === '/administrator/users/all') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::indexAction',  '_route' => 'administrator_users',);
                }

                // administrator_new_user
                if ($pathinfo === '/administrator/users/new') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::newAction',  '_route' => 'administrator_new_user',);
                }

                // administrator_delete_user
                if ($pathinfo === '/administrator/users/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_administrator_delete_user;
                    }

                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::deleteAction',  '_route' => 'administrator_delete_user',);
                }
                not_administrator_delete_user:

                // administrator_edit_user
                if (preg_match('#^/administrator/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_edit_user')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::editAction',));
                }

                // administrator_show_user
                if (preg_match('#^/administrator/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_show_user')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::showAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/author')) {
                // administrator_new_author
                if ($pathinfo === '/administrator/author/new') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::newAuthorAction',  '_route' => 'administrator_new_author',);
                }

                // administrator_authors
                if ($pathinfo === '/administrator/author/all') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::authorsAction',  '_route' => 'administrator_authors',);
                }

                // administrator_edit_author
                if (preg_match('#^/administrator/author/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_edit_author')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\UserController::editAuthorAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administrator/book')) {
                // administrator_books
                if ($pathinfo === '/administrator/book/all') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::indexAction',  '_route' => 'administrator_books',);
                }

                // administrator_new_book
                if ($pathinfo === '/administrator/book/new') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_administrator_new_book;
                    }

                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::newBookAction',  '_route' => 'administrator_new_book',);
                }
                not_administrator_new_book:

                // administrator_search_book
                if ($pathinfo === '/administrator/book/search') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::searchBookAction',  '_route' => 'administrator_search_book',);
                }

                // administrator_published_books
                if ($pathinfo === '/administrator/book/published') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::publishedAction',  '_route' => 'administrator_published_books',);
                }

                // administrator_edit_book
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_administrator_edit_book;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_edit_book')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::editBookAction',));
                }
                not_administrator_edit_book:

                // administrator_show_book
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_show_book')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::showBookAction',));
                }

                // administrator_book_finish_preparation
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/finish\\-preparation$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_administrator_book_finish_preparation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_book_finish_preparation')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::finishPreparationAction',));
                }
                not_administrator_book_finish_preparation:

                // administrator_book_publish
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_administrator_book_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_book_publish')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::publishBookAction',));
                }
                not_administrator_book_publish:

                // administrator_book_delete
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_administrator_book_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_book_delete')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::deleteBookAction',));
                }
                not_administrator_book_delete:

                // administrator_add_book_edition
                if (preg_match('#^/administrator/book/(?P<token>[^/]++)/new/edition$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_add_book_edition')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::addBookEditionAction',));
                }

                if (0 === strpos($pathinfo, '/administrator/book/edition')) {
                    // administrator_delete_book_edition
                    if (preg_match('#^/administrator/book/edition/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_delete_book_edition')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::deleteBookEditionAction',));
                    }

                    // administrator_activate_book_edition
                    if (preg_match('#^/administrator/book/edition/(?P<token>[^/]++)/activate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_activate_book_edition')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::activateBookEditionAction',));
                    }

                }

                // administrator_book_block
                if (0 === strpos($pathinfo, '/administrator/book/block') && preg_match('#^/administrator/book/block/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_book_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::editBookBlockAction',));
                }

                // administrator_create_block
                if (preg_match('#^/administrator/book/(?P<book>[^/]++)/block/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_create_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::createBookBlockAction',));
                }

                if (0 === strpos($pathinfo, '/administrator/book/block')) {
                    // administrator_update_block
                    if (preg_match('#^/administrator/book/block/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_update_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::updateBookBlockAction',));
                    }

                    // administrator_delete_block
                    if (preg_match('#^/administrator/book/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_administrator_delete_block;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_delete_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::deleteBookBlockAction',));
                    }
                    not_administrator_delete_block:

                    // administrator_update_block_parent
                    if (preg_match('#^/administrator/book/block/(?P<id>[^/]++)/parent/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_update_block_parent')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::updateBlockParentAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/administrator/newsletter')) {
                // newsletter_new
                if ($pathinfo === '/administrator/newsletter/new') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::newAction',  '_route' => 'newsletter_new',);
                }

                // newsletter_list
                if ($pathinfo === '/administrator/newsletter/list') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::listAction',  '_route' => 'newsletter_list',);
                }

                // newsletter_send
                if ($pathinfo === '/administrator/newsletter/send') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::sendAction',  '_route' => 'newsletter_send',);
                }

                // newsletter_preview
                if (preg_match('#^/administrator/newsletter/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_preview')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::previewAction',));
                }

                // newsletter_edit
                if (preg_match('#^/administrator/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_edit')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::editAction',));
                }

                // newsletter_remove
                if (preg_match('#^/administrator/newsletter/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_remove')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::removeAction',));
                }

                // newsletter_remove_attachment
                if (0 === strpos($pathinfo, '/administrator/newsletter/attachement') && preg_match('#^/administrator/newsletter/attachement/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_remove_attachment')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\NewsletterController::removeAttachmentAction',));
                }

            }

            // administrator_profile
            if ($pathinfo === '/administrator/profile') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::profileAction',  '_route' => 'administrator_profile',);
            }

            // administrator_manage_roles
            if ($pathinfo === '/administrator/manage-roles') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::manageRolesAction',  '_route' => 'administrator_manage_roles',);
            }

            // administrator_publish_block_version
            if (0 === strpos($pathinfo, '/administrator/block/version') && preg_match('#^/administrator/block/version/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_administrator_publish_block_version;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_publish_block_version')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::publishBlockVersionAction',));
            }
            not_administrator_publish_block_version:

            // administrator_display_version_progression
            if (0 === strpos($pathinfo, '/administrator/version') && preg_match('#^/administrator/version/(?P<token>[^/]++)/progression$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrator_display_version_progression')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::versionProgressionAction',));
            }

            // administrator_clients
            if ($pathinfo === '/administrator/clients') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::clientsAction',  '_route' => 'administrator_clients',);
            }

            // administrator_subscriptions
            if ($pathinfo === '/administrator/subscriptions') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::subscriptionsAction',  '_route' => 'administrator_subscriptions',);
            }

            if (0 === strpos($pathinfo, '/administrator/p')) {
                // administrator_purchases
                if ($pathinfo === '/administrator/purchases') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::purchasesAction',  '_route' => 'administrator_purchases',);
                }

                // administrator_parameters
                if ($pathinfo === '/administrator/parameters') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\AdministratorController::parametersAction',  '_route' => 'administrator_parameters',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/validator')) {
            // validator_homepage
            if (rtrim($pathinfo, '/') === '/validator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'validator_homepage');
                }

                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Validator\\ValidatorController::indexAction',  '_route' => 'validator_homepage',);
            }

            // validator_profile
            if ($pathinfo === '/validator/profile') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::profileAction',  '_route' => 'validator_profile',);
            }

            if (0 === strpos($pathinfo, '/validator/validation-requests')) {
                // validator_validation_requests
                if ($pathinfo === '/validator/validation-requests') {
                    return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Validator\\ValidatorController::validationRequestsAction',  '_route' => 'validator_validation_requests',);
                }

                // validator_verify_version
                if (preg_match('#^/validator/validation\\-requests/(?P<token>[^/]++)/verify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validator_verify_version')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Validator\\ValidatorController::verifyVersionAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/author')) {
            // author_homepage
            if (rtrim($pathinfo, '/') === '/author') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'author_homepage');
                }

                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::indexAction',  '_route' => 'author_homepage',);
            }

            // author_profile
            if ($pathinfo === '/author/profile') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::profileAction',  '_route' => 'author_profile',);
            }

            // author_my_books
            if ($pathinfo === '/author/my-books') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::myBooksAction',  '_route' => 'author_my_books',);
            }

            if (0 === strpos($pathinfo, '/author/b')) {
                if (0 === strpos($pathinfo, '/author/book')) {
                    // author_all_books
                    if ($pathinfo === '/author/books') {
                        return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::allBooksAction',  '_route' => 'author_all_books',);
                    }

                    // author_search_book
                    if ($pathinfo === '/author/book/search') {
                        return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::searchBookAction',  '_route' => 'author_search_book',);
                    }

                    // author_show_book
                    if (preg_match('#^/author/book/(?P<token>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_show_book')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::showBookAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/author/block')) {
                    // author_show_block
                    if (preg_match('#^/author/block/(?P<token>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_show_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::showBlockAction',));
                    }

                    // author_create_block_version
                    if (preg_match('#^/author/block/(?P<token>[^/]++)/version/new$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_author_create_block_version;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_create_block_version')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::createNewBlockVersionAction',));
                    }
                    not_author_create_block_version:

                    if (0 === strpos($pathinfo, '/author/block-version')) {
                        // author_block_version_edit
                        if (preg_match('#^/author/block\\-version/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_block_version_edit')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::editBookVersionAction',));
                        }

                        // author_block_version_cancel
                        if (preg_match('#^/author/block\\-version/(?P<token>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_author_block_version_cancel;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_block_version_cancel')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::cancelVersionCreationAction',));
                        }
                        not_author_block_version_cancel:

                    }

                    // author_delete_block
                    if (preg_match('#^/author/block/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_delete_block')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::deleteBlockAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/author/book')) {
                    // author_tag_book
                    if (preg_match('#^/author/book/(?P<token>[^/]++)/tag$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_tag_book')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::tagBookVersionAction',));
                    }

                    // author_revert_book_tag
                    if (0 === strpos($pathinfo, '/author/book/tag') && preg_match('#^/author/book/tag/(?P<token>[^/]++)/revert$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_revert_book_tag')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::revertBookTagAction',));
                    }

                }

            }

            // author_display_version_progression
            if (0 === strpos($pathinfo, '/author/version') && preg_match('#^/author/version/(?P<token>[^/]++)/progression$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_display_version_progression')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Author\\AuthorController::versionProgressionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/file_manager')) {
            // file_manager_load
            if (0 === strpos($pathinfo, '/file_manager/load') && preg_match('#^/file_manager/load/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_manager_load')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::fileManagerAction',));
            }

            // file_manager_upload_file
            if (preg_match('#^/file_manager/(?P<version_token>[^/]++)/file/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_manager_upload_file')), array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::fileManagerFileUploadAction',));
            }

            // file_manager_remove_file
            if ($pathinfo === '/file_manager/file/remove') {
                return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::fileManagerFileRemoveAction',  '_route' => 'file_manager_remove_file',);
            }

        }

        // not_found
        if ($pathinfo === '/error') {
            return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::pageNotFoundAction',  '_route' => 'not_found',);
        }

        // book_api_search
        if ($pathinfo === '/book/api/search') {
            return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\Administrator\\BookController::findBookAjaxAction',  '_route' => 'book_api_search',);
        }

        // create_menu
        if ($pathinfo === '/main-menu') {
            return array (  '_controller' => 'Core\\LibBundle\\Controller\\MenuController::RenderMainMenuAction',  '_route' => 'create_menu',);
        }

        // export_csv_ajax
        if ($pathinfo === '/get-csv-file') {
            return array (  '_controller' => 'LibBundle:Main:exportCsvAjax',  '_route' => 'export_csv_ajax',);
        }

        if (0 === strpos($pathinfo, '/intranet')) {
            // custom_list_file_manager
            if (0 === strpos($pathinfo, '/intranet/list') && preg_match('#^/intranet/list(?:/(?P<dir_path>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'custom_list_file_manager')), array (  '_controller' => 'LibBundle:Main:listFiles',  'dir_path' => NULL,));
            }

            // file_manager_associate
            if ($pathinfo === '/intranet/associate') {
                return array (  '_controller' => 'LibBundle:Main:chooseEntityFile',  '_route' => 'file_manager_associate',);
            }

        }

        // rse_check_session
        if ($pathinfo === '/api/check-session-exist') {
            return array (  '_controller' => 'LibBundle:Main:_sessionExist',  '_route' => 'rse_check_session',);
        }

        // mobelite_translator_modify
        if ($pathinfo === '/intranet/traductions') {
            return array (  '_controller' => 'LibBundle:Translator:index',  '_route' => 'mobelite_translator_modify',);
        }

        // get_user_notifications
        if ($pathinfo === '/notifications') {
            return array (  '_controller' => 'Webbook\\NotificationBundle\\Controller\\DefaultController::getNotificationsAction',  '_route' => 'get_user_notifications',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Webbook\\MainBundle\\Controller\\MainController::testAction',  '_route' => 'test',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
