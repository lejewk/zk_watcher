FROM lejewk/zk_base_image

ADD add /opt

RUN touch /tmp/data_source.txt
RUN chown nobody:nobody /tmp/data_source.txt
RUN chmod 777 /tmp/data_source.txt

# RUN watcher-1.0-SNAPSHOT.jar (hostport) (watch path) (file) (execute)
CMD java -jar /opt/watcher-1.0-SNAPSHOT.jar ${ZOO_HOST_PORT} /data_source /tmp/data_source.txt /opt/watcher_handler.sh