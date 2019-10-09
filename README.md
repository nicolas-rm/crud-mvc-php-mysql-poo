Git global setup

    git config --global user.name "Nicolás Rincón Mújica"
    git config --global user.email "nicolas.rm540@gmail.com"

Create a new repository

    git clone https://gitlab.com/Lucas540/crud-mvc-php-mysql-poo.git
    cd crud-mvc-php-mysql-poo
    touch README.md
    git add README.md
    git commit -m "add README"
    git push -u origin master

Push an existing folder

    cd existing_folder
    git init
    git remote add origin https://gitlab.com/Lucas540/crud-mvc-php-mysql-poo.git
    git add .
    git commit -m "Initial commit"
    git push -u origin master

Push an existing Git repository

    cd existing_repo
    git remote rename origin old-origin
    git remote add origin https://gitlab.com/Lucas540/crud-mvc-php-mysql-poo.git
    git push -u origin --all
    git push -u origin --tags