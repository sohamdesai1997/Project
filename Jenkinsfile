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
    failure {
    mail to: 'sohamdesai20@gmail.com',
      subject: "Build Failed: ${env.JOB_NAME} [${env.BUILD_NUMBER}]",
      body: "The build failed for ${env.JOB_NAME} [${env.BUILD_NUMBER}]. Please check the Jenkins console output for more information."
  }
    aborted {
      mail to: 'sohamdesai20@gmail.com',
        subject: "Build Aborted: ${env.JOB_NAME} [${env.BUILD_NUMBER}]",
        body: "The build was aborted for ${env.JOB_NAME} [${env.BUILD_NUMBER}]. Please check the Jenkins console output for more information."
    }
  }
}
