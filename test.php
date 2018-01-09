<?php
                    // if user session is set, display logout button
                    if(isset($_SESSION['user']))
                    {   
                        if ($_SESSION['role'] == 0)
                        {
                            echo '<li class="dropdown">';
                                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Action ';
                                echo '<span class="caret"></span></a>';
                                echo '<ul class="dropdown-menu">';
                                    echo '<li><a href="add-post.php">Add New Post</a></li>';
                                    echo '<li><a href="manage-post.php">Manage Existing Post</a></li>';
                                echo '</ul>';
                            echo '</li>';
                        }
                        
                        if ($_SESSION['role'] == 1)
                        {
                            echo '<li class="dropdown">';
                                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$_SESSION['user'].'&acute;s Action <span class="caret"></span></a>';
                                echo '<ul class="dropdown-menu">';
                        
                                    echo '<li><a href="subscription.php">Subscription</a></li>';
                                echo '</ul>';
                            echo '</li>';
                        }
                        
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
                    // else display register / login button
                    else {
                        echo '<li><a href="login-register.php">Register / Login</a></li>';
                    }
                ?>
