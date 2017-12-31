# ballenasoft-vagrant-nginx

A NGINX Vagrant Box for any web developer!, ready to use!.

Features
-------------

- NGINX, PHP 7, PHPUnit, Composer, Node, NVM, Go, Ruby, Mysql, MongoDB, SqLite, Git, CURL
- virtualhost-nginx script.
- PhpMyAdmin.
- default configurations.
- Mailhog as mail catcher

How to use
-------------
- clone the repo (i know you know how).
- uncomment the box_url in the Vagrantfile.
- `$ vagrant up`
- and that's it



You can also create virtual hosts to locate various projects on the same box.
    
    $ vagrant ssh
    $ sudo virtual-host create mytestsite.test /var/www/mytestsite/public
    

That's it.


    You can also go to phpmyadmin to manage your local development DBs:
    http://192.168.26.26/phpmyadmin/


    Or catch mails by:
    http://192.168.26.26:8025


#License and Use
-------------
Use at your own risk / responsibility. We make no guarantee of anything and we make changes based on our needs.    

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
     
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


