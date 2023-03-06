pipeline {
  agent any

  stages {
    stage('Build') {
      steps {
        sh 'docker build -t dvwa .'
      }
    }

    stage('Deploy') {
      environment {
        MYSQL_ROOT_PASSWORD = 'root_password'
      }
      steps {
        sh 'docker-compose up -d'
      }
    }
  }

  post {
    always {
      sh 'docker-compose down'
    }
  }
}
