FROM centos:8

# yum install
RUN yum -y update
RUN yum -y install java-1.8.0-openjdk wget vim redis

# install zookeeper
RUN wget https://apache.org/dist/zookeeper/stable/apache-zookeeper-3.5.6-bin.tar.gz -P /opt
RUN tar xzf /opt/apache-zookeeper-3.5.6-bin.tar.gz -C /opt
RUN mkdir -p /opt/apache-zookeeper-3.5.6-bin/data