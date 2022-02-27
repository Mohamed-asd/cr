echo "        
                    <script type=\"text/javascript\">
                        alert(\"Login Successful..........\");
                        window.location = (\"admin/index.php\");
                    </script>
                    ";
                }else
                {
                    echo "
                    <script type\"text/javascript\">
                        alert(\"Login Failed. Try Again.............\");
                        window.location = (\"login.php\");
                    </script>
                    ";