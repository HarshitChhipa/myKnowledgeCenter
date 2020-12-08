# Remove remote branch from local.
git checkout -b branch_name Branch_from_which_you_want_create_a_new_branch
git push remote_name :branch_name
## Reverting your changes back to the where you started
Sometimes there can be a thing where you have to undone some of your changes and in that case
There are 2 things that can be happened either you want to save your changes somewhere and would like to get them back later or
you don't want them at all.

in 2nd case do this --> git reset --hard commit_id
--hard is the flag to remove the history
# soft
Either ways is to do --soft to have the history.
This website is so awesome and simple for GIT.
https://makandracards.com/makandra

### Going back on some commit or simply resetting your branch to your code.
git reset {{commitId}} 

### A very good article on reset and revert
https://opensource.com/article/18/6/git-reset-revert-rebase-commands

### Show remote Urls
 - git remote -v
 - git remote rm {names you got from above cmd}
 
### Merge unrelated histories
- git pull origin master --allow-unrelated-histories

# REBASE
- Rebase integrated changes from one branch to another and it puts them in a linear way and it rewrites the commit history to produce linear commits.
## Steps to rebase 
- `git checkout ourBranch`
- `git rebase branchFromWhichchangesareToBeAdded`


---
Delete local branch in git ```git branch -d branch_name```
Delete Remote branch from local ```git push origin --delete branch_name```
