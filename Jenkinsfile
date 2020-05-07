pipeline {
    agent any
    stages {
         stage('docker image build') {
            steps {
                sh 'docker build -t nileshbhadana/php:v1 .'
            }
        }
         stage('docker container run') {
            steps {
                sh 'docker-compose up -d'
            }
        }
         stage('docker image push to dockerhub') {
            steps {
                sh 'docker push nileshbhadana/php:v1'
            }
        }
         stage('confirmation') {
            steps {
                sh 'echo "Successfull"'
            }
        }
    }
}
