# ansible_mailserver
ansible playbook to install a fully functional mailserver on a centos 8 server
some files are encrypted (personal data)
    - header_checks
    - helo_access
    - mynetworks
    - postscreen_access.cidr
    - sender_checks
    - skip_spf
    - spammers_accepted
    - transport


### worklog

order of battle (functionality reached):

1. postfix
   - master.cf
   - main.cf
   - all settings from included files
   - no rspamd/other external service
2. dovecot
   - can deliver locally
   - pop3s + imaps are working
3. postfixadmin
   - can define new address
   - new address receives mail
-> email is deliverable - MDA = dovecot !!!
4. rspamd
5. roundcube
