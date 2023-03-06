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
          docker.withRegistry('https://github.com/sohamdesai1997/Project.git', 'github_id') {
            docker.image("ditiss_dvwa:${env.BUILD_NUMBER}").push()
          }
        }
      }
    }
  }
}
