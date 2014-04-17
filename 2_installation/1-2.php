<div class=spacing>
  <div>

<pre>
Here is where you configure your remote server,it can be the same as this client
The $DOCSRV variable needs to be something that you can ssh to without a password

export DOCSRV="jartest@rigler.org"

####  This is the path to the Web Root on the target

export DOCPATH="/home/jartest/www"

####  This is where the binary files will live
export BIN="/home/jartest/docsh/docsh-cmds"

#### This is the remote directory that the 'ls' command will be exported to
export RBIN=$BIN/remote 

I haven't gotten my unit test up and running at this level, and there may be issues with running on a different client and server.  Soon I should get more released in place as well as sbshell, which is a pretty complete rewrite.  This code is from 2010, so it is pretty old.


</pre>
  </div>
</div>

