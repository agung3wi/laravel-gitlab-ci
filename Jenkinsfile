node {
    checkout scm
    docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
        sshagent (credentials: ['ssh-pttas-server-lokal']) {
            sh 'mkdir -p ~/.ssh'
            sh 'ssh-keyscan -H "192.168.88.40" > ~/.ssh/known_hosts'
            sh "rsync -rav --delete . pttas@192.168.88.40:/home/pttas/sites/laravelci-staging.pttas.xyz/ --exclude=.git --exclude=storage"
            sh "ssh pttas@192.168.88.40 'cd /home/pttas/sites/laravelci-staging.pttas.xyz/ && php artisan migrate'"
        }
    }
}
