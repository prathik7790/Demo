//Jenkinsfile (test pipeline)

/*pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
} */

node {
  
stage ('Listing Branches'){
echo “Initializing workflow”
//checkout code
echo GITHUB_PROJECT
git url: GITHUB_PROJECT, credentialsId: GITHUB_CREDENTIALS_ID
sh ‘git branch -r | awk \'{print $1}\’ ORS=\’\\n\’ >branches.txt’
sh ”’cut -d ‘/’ -f 2 branches.txt > branch.txt”’
//sh “sed s’/origin”\’///g branches.txt > branch.tx”
//sed ‘s/$/from S0 to S1/’
}
stage (‘Get build branch Parameter User Input’){
liste = readFile ‘branch.txt’
echo “please click on the link here to chose the branch to build”
env.BRANCH_SCOPE = input message: ‘Please choose the branch to build ‘, ok: ‘Validate!’,
parameters: [choice(name: ‘BRANCH_NAME’, choices: “${liste}”, description: ‘Branch to build?’)]
}
stage (‘Checkout external proj’) {
echo “${env.BRANCH_SCOPE}”
git branch: “${env.BRANCH_SCOPE}”,
credentialsId: ‘prathik7790’,
url: ‘https://github.com/prathik7790/Demo.git’
sh “ls -lat”
}
GITHUB_PROJECT = “https://github.com/prathik7790/Demo.git”
GITHUB_CREDENTIALS_ID = “prathik7790” //maps to a Jenkins Credentials Vault ID
APPLICATION_NAME = “Demo”
GITHUB_BRANCH = ‘${env.BRANCH_NAME}’

}
