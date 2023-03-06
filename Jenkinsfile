pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        script {
          docker.build("my-image-name:${env.BUILD_NUMBER}")
        }
      }
    }
    stage('Push') {
      steps {
        script {
          docker.withRegistry('https://registry.example.com', 'registry-credentials-id') {
            docker.image("my-image-name:${env.BUILD_NUMBER}").push()
          }
        }
      }
    }
  }
}
