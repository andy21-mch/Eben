<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require '../backend/Connection.php';
include '../backend/Blog.php';
include '../backend/User.php';
include '../backend/Projects.php';
include '../backend/Categories.php';
include '../backend/Application.php';
$user = new User();
$blog = new Blog();
$project = new Projects();
$category = new Categories();
$application = new Application();



if (isset($_POST['register-submit'])) {

    $user->setEmail($_POST['email']);
    $user->setFullname($_POST['fullname']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setPassword_repeat($_POST['password_repeat']);
    if ($user->createUser($user->getEmail(), $user->getPassword(), $user->getPassword_repeat(), $user->getFullname())) {
        return header("Location: ../index?success=true");
    } else {

        return header("Location: ./index?success=false");
    }
} elseif (isset($_POST['login-submit'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    if ($user->login($username, $password)) {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        return header("location: ./dashboard?status=success");
    } else {
        header("Location: ./index?error=wrong-username-or-password");
    }
} elseif (isset($_POST['blog-submit'])) {

    //FILTER_SANITIZE_STRING deprecated so changed to htmlspecial characters
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $vid = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    $categories = $_POST['categories'];


    $blog->setTitle($title);
    $blog->setContent($content);
    $blog->setImage($_FILES['image']);
    $blog->setVid($vid);
    $author = $_SESSION['userid'];


    if ($file_name = $blog->uploadImage($blog->getImage())) {
        $message = $blog->createPost($blog->getTitle(), $blog->getContent(), $author, $file_name, $blog->getVid(), $categories);
        if ($message) {
            return header("Location: ./dashboard?success");
        } else {
            return $message;
        }
    } else {
        $_SESSION['error'] = 'Error Uploading, please make sure the following are in tact'
            . '<ul><li> 1. Image size is not too large</li>'
            . '<li> 2. Image is either Jpeg, Jpg, or PNG </li>'
            . '<li> 3. You have a good network connection </li> </ul>';
        return header("Location:" . $_SERVER['HTTP_REFERER']);
    }
}

//FILTER_SANITIZE_STRING deprecated so changed to htmlspecial characters
elseif (isset($_POST['edit-blog-submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $vid = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    $slug = $_POST['slug'];
    $blog->setTitle($title);
    $blog->setContent($content);
    $blog->setImage($_FILES['image']);
    $blog->setVid($vid);
    $author = $_SESSION['userid'];

    if ($blog->getImage() == NULL) {
        if ($blog->updatePost($slug, $blog->getTitle(), NULL, $blog->getContent(), $blog->getVid())) {
            return header("Location: ./dashboard?success");
        } else {
            echo "POST ERROR";
        }
    } else {
        if ($file_name = $blog->uploadImage($blog->getImage())) {
            if ($blog->updatePost($slug, $blog->getTitle(), $file_name, $blog->getContent(), $blog->getVid())) {
                return header("Location: ./dashboard?success");
            } else {
                echo "POST ERROR";
            }
        } else {
            echo "IMAGE ERROR";
        }


    }
} elseif (isset($_POST['logout-submit'])) {
    $user->logout();
} elseif (isset($_POST['blog-delete'])) {
    //call the user logout function
    $id = $_POST['id'];
    $post = new Blog();
    if ($post->deletePost($id) == True) {
        header("Location: ./all-posts?id=success");
    } else {
        header("Location: ./all-posts?id=error");
    }
} elseif (isset($_GET['blog-single'])) {
    $id = $_GET['slug'];
    header("Location: ../../single-blog?id=$id");
} elseif (isset($_POST['contact-submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if ($user->contact($name, $email, $message, $subject)) {
        $_SESSION['message'] = "Thank you for contacting us. We will get back to you shortly";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "There was an error sending your message. Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
} elseif (isset($_POST['newsletter-submit'])) {
    $email = htmlspecialchars($_POST['email']);

    if (!empty($email)) {
        if ($user->subscribeToNewsletter($email)) {
            $_SESSION['message'] = "Thank you for subscribing to our newsletter";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['error'] = "There was an error subscribing to our newsletter. Please try again later";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
} elseif (isset($_POST['comment_submit'])) {
    $post_id = $_POST['post_id'];
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    if ($blog->addComment($post_id, $username, $comment)) {
        $_SESSION['message'] = "comment added";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "coult not comment. Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
} elseif (isset($_POST['project-submit'])) {
    $url = $_POST['image_url'];
    $title = $_POST['title'];
    $short_desc = $_POST['short_desc'];
    $heading = $_POST['heading'];
    $details = $_POST['details'];

    if ($project->create_project($url, $title, $short_desc, $heading, $details)) {
        $_SESSION['message'] = "Project added";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "coult not add project. Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
} elseif (isset($_POST['project-update'])) {
    $url = htmlspecialchars($_POST['image_url']);
    $title = htmlspecialchars($_POST['title']);
    $short_desc = htmlspecialchars($_POST['short_desc']);
    $heading = htmlspecialchars($_POST['heading']);
    $details = htmlspecialchars($_POST['details']);
    $id = $_POST['id'];

    if ($project->updateProject($url, $title, $short_desc, $heading, $details, $id)) {
        $_SESSION['message'] = "Project Updated";
        header("Location: all-projects.php?id=success");
    } else {
        $_SESSION['error'] = "coult not Update project. Please try again later";
        header("Location: ./all-projects?id=error");
    }
} elseif (isset($_POST['project-delete'])) {

    $id = $_POST['id'];
    if ($project->deletePost($id) == True) {
        header("Location: all-projects.php?id=success");
    } else {
        header("Location: ./all-projects?id=error");
    }
} elseif (isset($_POST['category_submit'])) {

    $cat_title = $_POST['title'];
    if ($category->create_Categories($cat_title)) {
        $_SESSION['message'] = "Category added";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Could not add Category . Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
} elseif (isset($_POST['category_delete'])) {

    $cat_id = $_POST['cat_id'];
    if ($category->delete_Categories($cat_id)) {
        $_SESSION['message'] = "Category Deleted";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Could not delete Category . Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['application-submit'])) {
    // Handle the form submission
    $program = $_POST['program'];
    $degree = $_POST['degree'];
    $gender = $_POST['gender'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    // Apply method returns true on success or an error message on failure
    $result = $application->apply($program, $degree, $gender, $firstName, $lastName, $email, $phone, $comment);

    if ($result === true) {
        $_SESSION['message'] = "Application submitted successfully";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = $result;
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
} elseif (isset($_POST['category_delete'])) {
    $cat_id = $_POST['cat_id'];
    if ($category->delete_Categories($cat_id)) {
        $_SESSION['message'] = "Category Deleted";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Could not delete Category. Please try again later";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
} else {
    return header("Location: ./unauthorized?error=unauthorized");
}

