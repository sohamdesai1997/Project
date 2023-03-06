pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        script {
          docker.build("ditiss_dvwa:${env.BUILD_NUMBER}")
        }
      }
    }
    stage('Push') {
      steps {
        script {
          docker.withRegistry('https://hub.docker.com/repositories/sohamd20', 'dockerhub_id') {
            docker.image("ditiss_dvwa:${env.BUILD_NUMBER}").push()
          }
        }
      }
    }
  }
}
