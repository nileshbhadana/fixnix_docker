pipeline {
    agent any
    stages {
         stage('docker image build') {
            steps {
                sh 'docker build -t nileshbhadana/php  .'
            }
        }
         stage('docker container run') {
            steps {
                sh 'docker container stop mysqlphp'
                sh 'docker container rm mysqlphp'
                sh 'docker container run -p 8081:80 --name mysqlphp nileshbhadana/php:v1 '
            }
        }
         stage('docker image push to dockerhub') {
            steps {
                sh 'docker push nileshbhadana/php'
            }
        }
         stage('confirmation') {
            steps {
                sh 'echo "Successfull"'
            }
        }
    }
}
